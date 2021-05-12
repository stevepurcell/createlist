<div>

    <table class="w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-2 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>

                <th class="px-2 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                    Creator
                </th>
                <th class="px-2 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                    Visible
                </th>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td class="px-2 py-3 whitespace-nowrap border-b leading-5">{{ $item->songlist_name }}</td>
                <td class="px-2 py-3 whitespace-nowrap border-b leading-5">{{ $item->songlist_creator }}</td>
                <td class="px-2 py-3 whitespace-nowrap border-b leading-5">{{ $item->songlist_visible }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
