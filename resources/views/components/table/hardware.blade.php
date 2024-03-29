<div id="hardwareTable" class="flex flex-col gap-1">
    {{-- Table Filter --}}
    <div class="flex justify-between bg-white p-2 rounded-md items-center">

        <form class="flex gap-x-8">
          <div class="border-r-2 border-slate-950 pr-8">
            <label for="hardwareRow">Show</label>
            <select class="border place-self-start" name="hardwareRow" id="hardwareRow">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
            </select>
            <span>entries</span>
          </div>

          <div>
            <label for="hardwareCategory">Category</label>
            <select class="border" name="hardwareCategory" id="hardwareCategory">
              <option value="all-assets">All Assets</option>
              <option value="laptop">Laptop</option>
              <option value="system unit">System Unit</option>
              <option value="monitor">Monitor</option>
              <option value="printer">Printer</option>
              <option value="ups">UPS</option>
              <option value="router">Router</option>
              <option value="firewall">Firewall</option>
              <option value="switch">Switch</option>
              <option value="access point">Access Point</option>
              <option value="mobile devices">Mobile Devices</option>
              <option value="others">Others</option>
            </select>
          </div>
        </form>
        <div class="bg-slate-100 px-4 py-1 rounded-lg">
            <label for="hardwareSearch">Search</label>
            <input class="border-none bg-slate-100 focus:outline-none" type="search" name="hardwareSearch" id="hardwareSearch">
        </div>
    </div>
    
    {{-- Table --}}
    <div id="categories" class="p-2 bg-white rounded-lg">
      <x-table.all-assets :hardwareAssets='$hardwareAssets' />
      <livewire:tables.laptop />
      <x-table.system-unit-category :systemUnits='$systemUnits' />
      <x-table.monitor-category />
      <x-table.printer-category />
      <x-table.ups-category />
      <x-table.router-category />
      <x-table.firewall-category />
      <x-table.switch-category />
      <x-table.access-point-category />
      <x-table.mobile-devices-category />
      <x-table.others-category />
    </div>
    
</div>