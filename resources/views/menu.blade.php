<!NAVBAR#########################################################>
  <nav class="navbar navbar-personalizado blanco" role="navigation">
    <a name="contenido"> </a>
    <div class="navbar-header">
      <button type="button"class="navbar-toggle borde-azul" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toogle navigation</span>
        <span class="icon-bar mi-icon-bar"></span>
        <span class="icon-bar mi-icon-bar"></span>
        <span class="icon-bar mi-icon-bar"></span>
      </button>
      <div class="hidden-lg hidden-md hidden-sm">
      <a href="#" class="navbar-brand">Menú</a>
      </div>
    </div>
    <div class="navbar-collapse collapse">
      <div class="container">
        <ul class="nav navbar-nav text-center">
          @foreach ($menus as $menu)
            {{-- MENU PRINCIPAL --}}
            <li><a href="#">{{$menu->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                @foreach ($posts as $post)
                  @if ($post->menu_id == $menu->id && $post->post_id==NULL)
                    {{-- POST DE PRIMER NIVEL --}}
                    <li><a href="{{ URL::to($post->menu->slug, $post->slug) }}">{{$post->title}}
                      @if ($post->posts->count())
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          @foreach ($posts as $post2)
                            @if ($post2->post_id==$post->id)
                              {{-- POST DE SEGUNDO NIVEL --}}
                              <li><a href="{{ URL::to($post2->menu->slug, $post2->slug) }}">{{$post2->title}}</a>
                                @if ($post2->posts->count())
                                  <ul class="dropdown-menu">
                                    @foreach ($posts as $post3)
                                      @if ($post3->post_id==$post2->id)
                                        <li><a href="{{ URL::to($post3->menu->slug, $post3->slug) }}">{{$post3->title}}</a></li>
                                      @endif
                                    @endforeach
                                  </ul>
                                @endif
                              </li>
                            @endif
                          @endforeach
                        </ul>
                      @else
                        </a>
                      @endif
                    </li>
                  @endif
                @endforeach
              </ul>
            </li>
          @endforeach
          <li class="tema"><a href="{{URL::to('contacto')}}" class="btn-contacto tema">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
<!END NAVBAR#####################################################>
