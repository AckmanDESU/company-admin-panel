<form action="/employees/{{ $employee->id }}" method="post" title="Delete">
    @csrf
    @method('DELETE')

    <button class="button is-danger">
        <span class="icon is-medium has-text-light">
            <i class="fas fa-trash-alt"></i>
        </span>
    </button>
</form>
