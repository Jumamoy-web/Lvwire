<div>
    <table class="table-auto w-full border-collapse border">
        <thead>
            <tr>
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Title</th>
                <th class="px-4 py-2 border">Content</th>
                <th class="px-4 py-2 border">Status</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                @livewire('post.table-row', ['post' => $post], key($post->id))
            @endforeach
        </tbody>
    </table>
</div>