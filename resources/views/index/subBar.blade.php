<style>
    .btn-search {
        background-color: #C9777D;
        border: 1px solid #C9777D;
        color: white;
        cursor: pointer;
    }

    .btn-search:hover {
        border: 1px solid #C9777D;
        background-color: white;
        color: #C9777D;
    }

    .dropdown {
        position: relative;
        /* Para que el menú desplegable se posicione en relación al botón */
    }
</style>
<div class="max-w-[1100px] my-[18px]  mx-auto">
    <div class="flex justify-between items-center">
        <div class="">
            <img class="h-auto max-w-full w-[86%]" src="{{asset('img/logo.png')}}" alt="">
        </div>
        <div class="flex gap-2 items-center ">
            <div>
                <nav>
                    <ul class="menu">
                        <?php
                        $menuHtml = '';
                        $index = '';
                        $onclick = 'inicio();';
                        $claseIndex = 'class="menu-link"';
                        $menus = App\Models\Menu::getMenu();
                        if (isset($menus) && count($menus) > 0) {
                            foreach ($menus as $menu) {
                                $submenuHtml = '';
                                if (count($menu->subMenus) > 0) {
                                    $index = 'javascript:;';
                                    $claseIndex = ' class="menu-link dropbtn"';
                                    $onclick = '';
                                    $submenuHtml .= '<div class="dropdown-content" id="menuContent">';
                                    foreach ($menu->subMenus as $submenu) {
                                        $subMenu_ = App\Models\Menu::with('allSubMenus')->find($submenu->id);
                                        $subMenuHtml_ = '';
                                        if (count($subMenu_->allSubMenus) > 0) {
                                            foreach ($subMenu_->allSubMenus as $sub) {
                                                $subMenuHtml_ .= '<a href="' . $sub->controlador . '/' . $sub->funcion . '">' . $sub->nombre . '</a>';
                                            }
                                        }
                                        $submenuHtml .= '<div class="menu-column"><h3>' . $submenu->nombre . '</h3>' . $subMenuHtml_ . '</div>';
                                    }
                                    $submenuHtml .= '</div>';
                                }
                                $menuHtml .= '<li class="dropdown" id="menuToggle">
                                     <a href="' . $index . '" ' . $claseIndex . ' onclick="toggleMenu(event);' . $onclick . '">' . $menu->nombre . '</a>' . $submenuHtml . '
                                </li>';
                            }
                        }
                        echo $menuHtml;
                        ?>
                    </ul>
                </nav>
            </div>
            <div class="flex gap-3 items-center">
                <div class="flex items-center ">
                    <!-- Campo de búsqueda -->
                    <input type="text" placeholder="¿Qué producto buscas?" class="w-[350px] h-[37px] text-[12px] flex-1 rounded-l-full py-2 px-4 text-gray-600 outline-none border-[1px] border-[#C9777D]">
                    <!-- Botón de búsqueda (Lupa) -->
                    <button class=" transition-all duration-500 h-[37px]  rounded-r-full px-4 py-2  text-[14px] btn-search ">
                        <i class="fas fa-search"></i>
                    </button>
                </div>

                <!-- Icono del carrito, separado del contenedor principal -->
                <div class=" flex">
                    @php $width = 20; @endphp
                    @include("icons.cart")
                    <!-- Contador del carrito -->
                    <span class="relative -top-0 -right-2 bg-[#C9777D] text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function inicio() {
        window.open('<?=url('/')?>', '_self');
    }
</script>