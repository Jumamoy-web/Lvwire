<tr>
    <td class="border px-2">{{ $post->id }}</td>
    <td class="border px-2">{{ $post->title }}</td>
    <td class="border px-2">{{ $post->content }}</td>
    <td class="border px-2">
        @if ($post->is_archived)
            <span class="text-red-600">Archived</span>
        @else
            <span class="text-green-600">Active</span>
        @endif
    </td>
    <td class="border px-2">
        @if (!$post->is_archived)
            <button wire:click="archive" class="px-2 py-1 bg-blue-500 text-white rounded">
                Archive
            </button>
        @endif
    </td>
</tr>