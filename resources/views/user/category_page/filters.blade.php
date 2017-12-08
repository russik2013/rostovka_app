<form id="form1">
    <!-- Filter By Size -->
    <div class="widget-sidebar widget-filter-size">
        <h6 class="widget-title" data-id="tip">Тип</h6>
        <div class="filterInner">

            @foreach($types as $type)
                <div class="checkbox checkbox-warning checkbox-circle">
                    <input id="type{{$type -> id}}" name="type{{$type -> id}}" type="checkbox" value="{{$type -> name}}">
                    <label for="type{{$type -> id}}">
                        {{$type -> name}}
                    </label>
                </div>
                @endforeach
        </div>
    </div>

    <div class="widget-sidebar widget-filter-size">
        <h6 class="widget-title" data-id="season">Сезон</h6>
        <div class="filterInner">

            @foreach($seasons as $season)

                <div class="checkbox checkbox-warning checkbox-circle">
                    <input id="season{{$season -> id}}" type="checkbox" name="season{{$season -> id}}" value="{{$season -> name}}">
                    <label for="season{{$season -> id}}">
                        {{$season -> name}}
                    </label>
                </div>
                @endforeach
        </div>
    </div>

    <div class="widget-sidebar widget-filter-size">
        <h6 class="widget-title" data-id="dimensions">Размеры</h6>
        <div class="filterInner">

        </div>
    </div>

    <div class="widget-sidebar widget-filter-size">
        <h6 class="widget-title" data-id="manufacturers">Производители</h6>
        <div class="filterInner">


            @foreach($manufacturers as $manufacturer)

                <div class="checkbox checkbox-warning checkbox-circle">
                    <input id="manufacturer{{$manufacturer -> id}}" type="checkbox" value="{{$manufacturer -> name}}">
                    <label for="manufacturer{{$manufacturer -> id}}">
                        {{$manufacturer -> name}}
                    </label>
                </div>

                @endforeach

        </div>
    </div>
</form>