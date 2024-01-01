@extends('admin.layouts.master')

@section('site-title')
Create Role
@endsection

@section('page-content')
    <form action="{{ !empty($role) ? route('admin_role_update') : route('admin_role_store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-8 col-lg-3 col-sm-12">
                <div class="card"> 
                    <div class="card-header card-info">
                        Role Information
                    </div> 
                
                    @if (!empty($role))
                        <input type="hidden" name="id" value="{{ $role->id }}">
                    @endif
                    <div class="card-body">

                        <div class="form-group name">
                            <label for="name">Name: </label>
                            <input type="text" class="form-control form-control-sm" id="name" placeholder="Enter Name" name="name"
                                value="{{ !empty($role) ? $role->name : old('name') }}" required>
                        </div>

                        <div class="form-group select arrow_class">
                            <label for="select">Role type </label>
                            @php
                                $role_type = [
                                    'Global' => 'Global',
                                    'General' => 'General',
                                    'Custom' => 'Custom',
                                ];
                            @endphp
                            <select class="form-control form-control-sm" name="type">
                                <option disabled selected>Select role type</option>
                                @foreach ($role_type as $index => $data)
                                    <option value="{{ $index }}"
                                        {{ !empty($role) && $role->type == $index ? 'selected' : '' }}>
                                        {{ $data }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-primary">Submit</button>
                    </div>
                </div>
            </div>

            <div class="col-md-2"></div>

            <div class="col-md-8 col-lg-6 col-sm-12">
                <h6> 
                    <div class="title-with-border mb-1"> 
                        Route Permission 
                        <div class="d-inline-block float-end valign-text-bottom me-2">
                            <input type="checkbox" class="" id="checkAll">
                            <label for="checkAll" class="valign-super">Check All</label>
                        </div>
                    </div> 
                </h6>
                
                @php
                    $routeList = $Query::getData('route_lists')->groupBy('route_group');
                    //dd($routeList);
                @endphp
                <div class="row">
                    @foreach ($routeList as $index => $item)
                        <div class="col-md-3">
                            <div class="xform-group">
                                <div class="form-check">
                                    <p class="mb-1 fw-bold">
                                        {{$Model('Routegroup')::name($index) }}
                                    </p>
                                    @foreach ($item as $key => $data)
                                        @php
                                            $checkId = \App\Models\Routelistrole::checkRouteRole($role->id ?? null, $data->id);

                                            $routeid = $checkId->route_id ?? null;
                                            $showAs = $checkId->show_as ?? null;
                                            //dump( $showAs);
                                        @endphp
                                        <div class="form-group {{!empty($data->show_for) ? 'alert-success ps-1' : ''}}">
                                            <input type="checkbox" id="{{ $data->route_name }}" class=" mb-0 checkItem route_name"
                                                {{ $routeid == $data->id ? 'checked' : '' }} name="route_id[]"
                                                value="{{ $data->id }}">
                                            <label class="w-100 route_name" for="{{ $data->route_name }}">{{ $data->route_title }}</label>
                                        </div>

                                        @if($data->is_show_as == 'Yes')
                                            <div class="form-group ms-3 ps-2 alert-warning  {{ $data->route_name.'_show_as' }}" style="{{ $showAs ? '' : 'display: none' }}">
                                                <label class="w-100" for="">Show Based On</label>
                                            </div>
                                            <div class="form-group ms-3 ps-2 alert-warning {{ $data->route_name.'_show_as' }}" style="{{ $showAs ? 'display:block' :  'display: none' }}">
                                                @php $showAsEnum = $Query::getEnumValues('route_list_roles', 'show_as'); @endphp
                                                @foreach ($showAsEnum as $value )
                                                <div class="d-inline-flex">
                                                    <input type="radio" id="{{$data->id.$value }}" class="checkItem mb-0"
                                                    {{ $showAs == $value ? 'checked' : '' }} name="show_as[{{$data->id}}]"
                                                    value="{{ $value }}">
                                                    <label class="w-100" for="{{$data->id.$value }}">{{$value}}</label>
                                                </div>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </form>
@endsection



@section('cusjs')
<script>
    $('input[type="checkbox"].route_name').on('click', function(){
        let getFor = $(this).prop('id');
        //alert(getFor)
        if($(this).is(':checked')){
            $('.'+getFor+'_show_as').show();
            $('.'+getFor+'_show_as input[type="radio"]').prop('required', true);       
        }else {
            $('.'+getFor+'_show_as input[type="radio"]').prop('required', false);       
            $('.'+getFor+'_show_as').hide();
        }
    })
    $('label.route_name').on('click', function(){
        let getFor = $(this).prop('for');
        if($(this).is(':checked')){
            $('.'+getFor+'_show_as input[type="radio"]').prop('required', true);
            $('.'+getFor+'_show_as').show();
        }else {
            $('.'+getFor+'_show_as input[type="radio"]').prop('required', false);       
            $('input.'+getFor+'_show_as').hide();
        }
    })
</script>
@endsection