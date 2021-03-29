<div class="p-3 bg-light navigation-bar">
    <a href="{{ route('task.index') }}" class="pb-3 mb-3 link-dark text-decoration-none border-bottom navigation-bar__title">
        <span class="navigation-bar__title-text">Freelancer CRM</span>
    </a>

    <ul class="list-unstyled ps-0 navigation-bar-menu">
        <x-navigation-bar.item>
            <x-navigation-bar.menu-root-button target="task-collapse">Задачи</x-navigation-bar.menu-root-button>
            <x-navigation-bar.submenu id="task-collapse">
                <x-navigation-bar.subitem href="{{ route('task.index') }}">Список задач</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Новая задача</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Статусы задач</x-navigation-bar.subitem>
            </x-navigation-bar.submenu>
        </x-navigation-bar.item>

        <x-navigation-bar.item>
            <x-navigation-bar.menu-root-button target="sale-collapse">Продажи</x-navigation-bar.menu-root-button>
            <x-navigation-bar.submenu id="sale-collapse">
                <x-navigation-bar.subitem href="#">Счета</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Акты</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Накладные</x-navigation-bar.subitem>
            </x-navigation-bar.submenu>
        </x-navigation-bar.item>

        <x-navigation-bar.item>
            <x-navigation-bar.menu-root-button target="finance-collapse">Финансы</x-navigation-bar.menu-root-button>
            <x-navigation-bar.submenu id="finance-collapse">
                <x-navigation-bar.subitem href="#">Поступление ДС</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Источники платежей</x-navigation-bar.subitem>
            </x-navigation-bar.submenu>
        </x-navigation-bar.item>

        <x-navigation-bar.item>
            <x-navigation-bar.menu-root-button target="customer-collapse">Клиенты</x-navigation-bar.menu-root-button>
            <x-navigation-bar.submenu id="customer-collapse">
                <x-navigation-bar.subitem href="#">Клиенты</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Контрагенты</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Статусы клиентов</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Контактные лица</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Должности сотрудников</x-navigation-bar.subitem>
            </x-navigation-bar.submenu>
        </x-navigation-bar.item>

        <x-navigation-bar.item>
            <x-navigation-bar.menu-root-button target="reference-collapse">Классификаторы</x-navigation-bar.menu-root-button>
            <x-navigation-bar.submenu id="reference-collapse">
                <x-navigation-bar.subitem href="#">Номенклатура</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Виды цен</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Банки</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Единицы измерения</x-navigation-bar.subitem>
            </x-navigation-bar.submenu>
        </x-navigation-bar.item>

        <x-navigation-bar.item>
            <x-navigation-bar.menu-root-button target="org-collapse">Компания</x-navigation-bar.menu-root-button>
            <x-navigation-bar.submenu id="org-collapse">
                <x-navigation-bar.subitem href="#">Организации</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Банковские счета</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Ответственные лица</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Должности</x-navigation-bar.subitem>
            </x-navigation-bar.submenu>
        </x-navigation-bar.item>

        <x-navigation-bar.menu-divider />

        <x-navigation-bar.item>
            <x-navigation-bar.menu-root-button target="users-collapse">Безопасность</x-navigation-bar.menu-root-button>
            <x-navigation-bar.submenu id="users-collapse">
                <x-navigation-bar.subitem href="#">Пользователи</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Новый пользователь</x-navigation-bar.subitem>
            </x-navigation-bar.submenu>
        </x-navigation-bar.item>

        <x-navigation-bar.item>
            <x-navigation-bar.menu-root-button target="profile-collapse">Учётная запись</x-navigation-bar.menu-root-button>
            <x-navigation-bar.submenu id="profile-collapse">
                <x-navigation-bar.subitem href="#">Профиль</x-navigation-bar.subitem>
                <x-navigation-bar.subitem href="#">Выход</x-navigation-bar.subitem>
            </x-navigation-bar.submenu>
        </x-navigation-bar.item>
    </ul>
</div>

<div class="navigation-divider"></div>
