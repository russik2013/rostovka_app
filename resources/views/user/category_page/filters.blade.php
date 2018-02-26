<form id="form1">
    <!-- Filter By Size -->

    @if($category -> id == 1 )

        <div class="widget-sidebar widget-filter-size">
            <h6 class="widget-title" data-id="sex">Пол</h6>
            <div class="filterInner">


                <div class="checkbox checkbox-warning checkbox-circle">
                    <input id="sex1" name="sex1" type="checkbox" value="мальчик" data-value="sex1">
                    <label for="sex1">
                        мальчик
                    </label>
                </div>

                <div class="checkbox checkbox-warning checkbox-circle">
                    <input id="sex2" name="sex2" type="checkbox" value="девочка" data-value="sex2">
                    <label for="sex2">
                        девочка
                    </label>
                </div>

            </div>
        </div>

    @endif

    <div class="widget-sidebar widget-filter-size">
        <h6 class="widget-title" data-id="tip">Тип</h6>
        <div class="filterInner">

            @foreach($types as $type)
                <div class="checkbox checkbox-warning checkbox-circle">
                    <input id="type{{$type -> id}}" name="type{{$type -> id}}" type="checkbox" value="{{$type -> name}}" data-value="type{{$type -> id}}">
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
                    <input id="season{{$season -> id}}" type="checkbox" name="season{{$season -> id}}" value="{{$season -> name}}" data-value="season{{$season -> id}}">
                    <label for="season{{$season -> id}}">
                        {{$season -> name}}
                    </label>
                </div>
                @endforeach
        </div>
    </div>

    <div class="widget-sidebar widget-filter-size sizeBlock">
        <h6 class="widget-title" data-id="dimensions">Размеры</h6>
        {{--<div class="filterInner">--}}
            {{--<div class="col-md-6 no-paddig pull-left">--}}
                {{--<input type="text" id="minchoose" class="pull-left" readonly>--}}
            {{--</div>--}}

            {{--<div class="col-md-6 pull-right">--}}
                {{--<input type="text" id="amount" class="pull-left sintype" readonly>--}}
            {{--</div>--}}

            {{--<div id="slider-range" class="pull-left col-md-12 no-padding"></div>--}}
        {{--</div>--}}

        <div>
            <input id="ex2" type="text" class="span2 filterBySizes" value="" data-slider-min="10" data-slider-max="50" data-slider-step="1" data-slider-value="[10,50]"/>
        </div>
    </div>

    <div class="widget-sidebar widget-filter-size">
        <h6 class="widget-title" data-id="manufacturers">Производители</h6>
        <div class="filterInner">


            @foreach($manufacturers as $manufacturer)

                <div class="checkbox checkbox-warning checkbox-circle">
                    <input id="manufacturer{{$manufacturer -> id}}" type="checkbox" value="{{$manufacturer -> name}}" data-value="manufacturer{{$manufacturer -> id}}">
                    <label for="manufacturer{{$manufacturer -> id}}">
                        {{$manufacturer -> name}}
                    </label>
                </div>

                @endforeach

        </div>
    </div>
</form>