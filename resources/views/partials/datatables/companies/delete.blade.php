<form action="{{ url("companies/$company->id") }}" method="post" title="Delete">
    {{ csrf_field() }}
    @method('delete')

    <button class="button is-danger">
        <span class="icon is-medium has-text-light">
            <i class="fas fa-trash-alt"></i>
        </span>
    </button>
</form>
