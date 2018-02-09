
                <ul>
                    <li>
                        <a class="mainforMobile" href="{{url('/')}}"> Главная</a>
                    </li>
                    @foreach($categories as $category)

                        <li>
                            <a href="{{url($category -> id.'/category')}}">{{$category -> name}}@if($category -> name == "АКЦИИ")<span class="nav-label-sale"></span>@endif</a>
                        </li>
                        @endforeach


                </ul>