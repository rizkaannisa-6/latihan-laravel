<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>
<x-app>

    <x-slot:title>{{ $title }}</x-slot>



    <a class="btn btn-warning mb-3" href="{{ route('department.index') }}" role="button">
        Back To Department</a>

    <ul class="list-group">

        @foreach ($departments->lecturers as $lecturer)
            <li class="list-group-item">{{ $lecturer->name }}</li>
        @endforeach

        <li class="list-group-item">Nama : {{ $departments->name }}</li>
    </ul>

</x-app>
