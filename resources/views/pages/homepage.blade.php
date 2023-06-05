<x-header />
        <x-header-nav />
        <div class="flex">
            <aside class="bg-blue-300 h-[100vh] w-max">
                <nav id="sidebar" class="divide-y">
                        @php
                            $accordionItems = ['New Movement', 'Hardware', 'Software', 'Service Support', 'vendor', 'Toner', 'Others'];
                        @endphp
                        <x-accordion accordionTitle="Asset Monitoring" :items="$accordionItems" icon="img/barcode.svg" />

                        @php
                            $accordionItems = ["New", "List"];
                        @endphp
                        <x-accordion accordionTitle="Department" :items="$accordionItems" icon="img/department.svg" />

                        @php
                            $accordionItems = ["New", "List"];
                        @endphp
                        <x-accordion accordionTitle="Employee List" :items="$accordionItems" icon="img/employees.svg" />


                        @php
                            $accordionItems = ["New", "List"];
                        @endphp
                        <x-accordion accordionTitle="Users" :items="$accordionItems" icon="img/users.svg" />


                        {{-- <x-accordion accordionTitle="Reports"/> --}}
                </nav>
            </aside>
            <main class="bg-red-300 w-full"></main>
        </div>
<x-footer />