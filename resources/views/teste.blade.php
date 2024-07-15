<div ng-app="myApp">
    
    <div class="drop-menu" ng-class="{mobile: isScreenLarge}" ng-controller="myController">
        <div ng-style="{'width': (valor.length * 83) + 'px'}">kkkkkkkkkkk</div>
        {{-- <div>@{{viewMode}}</div> --}}
        <button ng-click="handleToggleDropdown($event)">teste drop menu</button>
        <div ng-show="isOpen === true" class="drop-down">
            <div class="left-side" ng-class="" ng-show="isScreenLarge && viewMode === 'left' || !isScreenLarge">
                <button ng-click="closeDropdown()" ng-show="isScreenLarge">X</button>
                <ul>
                    <li><button ng-click="addValues('a')">Eletrodomésticos</button></li>
                    <li><button ng-click="addValues('b')">Eletrodomésticos</button></li>
                    <li><button ng-click="addValues('c')">Eletrodomésticos</button></li>
                    <li><button>Eletrodomésticos</button></li>
                    <li><button>Eletrodomésticos</button></li>
                    <li><button>Eletrodomésticos</button></li>
                    <li><button>Eletrodomésticos</button></li>
                </ul>
            </div>
            <div class="right-side" ng-show="isScreenLarge && viewMode === 'right' || !isScreenLarge">
                <button ng-click="resetViewMode()" ng-show="isScreenLarge"><-</button>
                <ul>
                    <li ng-repeat="teste in values">@{{teste}}</li>
                </ul>
            </div>nome
        </div>
        <select
            id=""
            ng-model="teste123.negocio"
            ng-change="mostra(teste123.negocio)"
        >
            <option value="">teste</option>
            <option
                ng-repeat="item in arrayTeste"
                value="@{{item.id}}"
            >
                @{{item.nome}}
            </option>
        </select>
        <div class="text-xl">@{{teste123}}</div>
    </div>
    <div class="flex-container">
        <div class="div-flex flex1">flex1</div>
        <div class="div-flex flex2">flex2</div>
        <div class="div-flex flex3">flex3</div>
        <div class="div-flex flex4">flex4</div>
        <div class="flex-group">
            <div class="div-flex flex5">flex5</div>
            <div class="div-flex flex6">flex6</div>
        </div>
    </div>
    <p class="teste-sass circle">teste aaaaaaaaaaaaa</p>   
    <my-component first="aaaaaa" last="bbbbbbbbbbb"></my-component>
</div>

@yield('content', View::make('catalago.novo'))