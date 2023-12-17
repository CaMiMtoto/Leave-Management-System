{{--create a dropdown options for actions--}}
<div class="dropdown">
    <a href="#" class="btn btn-sm btn-clean btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-three-dots fs-3"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-end">
        <a class="dropdown-item" href="{{ route('employees.show', $id) }}">
            <i class="bi bi-eye-fill"></i>
            View
        </a>
        <a class="dropdown-item js-edit" href="{{ route('employees.show', $id) }}">
            <i class="bi bi-pencil-fill"></i>
            Edit
        </a>
        <a class="dropdown-item" href="{{ route('employees.destroy', $id) }}"
           onclick="event.preventDefault(); document.getElementById('delete-employee-{{ $id }}').submit();">
            <i class="bi bi-trash-fill"></i>
            Delete
        </a>
        <form id="delete-employee-{{ $id }}" action="{{ route('employees.destroy', $id) }}" method="POST"
              class="d-none">
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
