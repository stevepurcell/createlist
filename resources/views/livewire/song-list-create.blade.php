<div>
    @if ($songListSaved)
        <div class="p-2 bg-green-500 text-white border border-green-600 rounded-md">Songlist saved successfully.</div>
    @endif
    <form wire:submit.prevent="saveSongList">
        @csrf
        <div>
            <label>List Name:</label>
            <input wire:model="songlist_name" type="text" name="songlist_name" class="focus:outline-none w-full border border-indigo-500 rounded-md p-1" value="{{ old('songlist_name') }}" required>
        </div>
        <div>
            <label>Creator:</label>
            <input wire:model="songlist_creator" type="text" name="songlist_creator" class="focus:outline-none w-full border border-indigo-500 rounded-md p-1" value="{{ old('songlist_creator') }}">
        </div>
        <div class="mt-2">
            <input wire:model="songlist_visible" type="radio" value="1"/> Public
            <input wire:model="songlist_visible" type="radio" value="0"/> Private
        </div>
        
        <div class="mt-4 border border-gray-300 rounded-md">
            <div class="border-b border-gray-300  p-5">
                Products
            </div>

            <div class="p-5">
                @if($data)
                <table class="w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-2 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">
                                Choose
                            </th>

                            <th class="px-2 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                                Artist
                            </th>
                            <th class="px-2 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th class="px-2 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                    </thead>
                    <tbody>
                    @foreach ($data as $song)
                        <tr>
                            <td class="px-2 py-3 whitespace-nowrap border-b leading-5">
                                <input type="checkbox" wire:model="selectedSongs" value="{{ $song->id }}">
                            </td>
                            <td class="px-2 py-3 whitespace-nowrap border-b leading-5">
                                {{ $song->name }}
                            </td>
                                <td class="px-2 py-3 whitespace-nowrap border-b leading-5">
                                {{ $song->artist }}
                            </td>
                            <td class="px-2 py-3 whitespace-nowrap border-b leading-5">
                                {{ $song->song_status_id }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
        <br/>
        <div>
            <input class="hover:bg-indigo-600 cursor-pointer p-1 bg-indigo-500 border border-indigo-600 rounded-md text-white focus:outline-none" type="submit" value="Save Songlist">
        </div>
    </form>
</div>
