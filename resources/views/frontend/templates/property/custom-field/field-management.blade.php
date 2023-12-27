<?php
//dump($post);
$propertyType = $Model('Category')::name($post->category_id);

$property_manage = $Model('PostCustomField')::getData($post->id, 'field-management');
dump($propertyType);
dump($property_manage);
?>
<div class="card">
    <div class="card-header card-info  alert-primary">
        <h3 class="card-title panel-title float-left">
            Property Custom Field Management
        </h3>
    </div><!-- end card-header-->
    <div class="card-body">

        @if($propertyType == "Boat")
            <div class="row">
                <div class="col-md-6">
                    @php
                        $commode = [
                            'Classic Boat (Steel Body)',
                            'Classic Boat (Wood Body)',
                            'House Boat (Wood Body)',
                            'House Boat (Steel Body)'
                        ];
                    @endphp
                    <div class="form-group">
                        <label style="display: block;" for="boat_type" class="mr-4">Boat Type</label>
                        @foreach($commode as $key => $item)
                            <label style="font-weight: 400;" for="{{ $item }}">
                                <input id="{{ $item }}" type="radio" name="property_manage[boat_type]"
                                       value="{{ $item }}" {{ isset($property_manage['boat_type'])  && $item == $property_manage['boat_type'] ? 'checked' : NULL }}>
                                {{ $item }}
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

        @elseif($propertyType == "Event")
            <div class="form-group">
                <label for="property_manage_title">Location</label>
                <input class="form-control form-control-sm" type="text" name="property_manage[location]"
                       value="{{$property_manage['location'] ?? NULL }}" required>
            </div>
        @elseif($propertyType == "Resort")
            <div class="form-group">
                <label for="property_manage_title">Room Name</label>
                <input class="form-control form-control-sm" type="text" name="property_manage[room_name]"
                       value="{{$property_manage['room_name'] ?? NULL }}" required>
            </div>
        @endif
        <button class="btn btn-primary" type="submit">Submit</button>
    </div><!-- /.card-body -->
</div>
