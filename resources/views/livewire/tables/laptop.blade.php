
<table id="laptop" class="table-auto border border-collapse hidden">
    <thead>
      <tr class="">
        <th class="border px-2 py-1">#</th>
        {{-- <th class="border px-2 py-1">Asset Type</th> --}}
        <th wire:click='sortBy("asset_tag")' class="border px-2 py-1">Asset Tag</th>
        <th class="border px-2 py-1">Brand</th>
        <th class="border px-2 py-1">Model</th>
        <th class="border px-2 py-1">Asset Tag</th>
        <th class="border px-2 py-1">Serial #</th>
        <th class="border px-2 py-1">Processor</th>
        <th class="border px-2 py-1">Memory</th>
        <th class="border px-2 py-1">Storage</th>
        <th class="border px-2 py-1">Graphics Card</th>
        <th class="border px-2 py-1">Date Purchased</th>
        <th class="border px-2 py-1">Current User</th>
        <th class="border px-2 py-1">DR #</th>
        <th class="border px-2 py-1">PO #</th>
        <th class="border px-2 py-1">Price</th>
        <th class="border px-2 py-1">Condtion</th>
        <th class="border px-2 py-1">Status</th>
      </tr>
    </thead>
    <tbody>
      {{-- @php
          $counter = 1;
      @endphp --}}
      @foreach ($laptops as $laptop)
      <tr>
        <td class="border px-2 py-1">{{ $laptop->id }}</td>
        {{-- <td class="border px-2 py-1">{{ $laptop->item }}</td> --}}
        <td class="border px-2 py-1">{{ $lapatop->asset_tag }}</td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
        <th class="border px-2 py-1"></th>
        <th class="border px-2 py-1"></th>
        <th class="border px-2 py-1"></th>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
      </tr>
      @endforeach
    </tbody>
</table>
