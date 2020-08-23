<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">

    {{-- btn Back --}}
    <li class="nav-item">
        <a href="{{ (!str_contains(url()->current(), 'create') && !str_contains(url()->previous(), 'edit') && str_contains(url()->previous(), $urlMain)) ? url()->previous() : $urlMain }}"
           class="nav-link active">
            <span class="btn-icon-wrapper pr-2 opacity-8">
                <i class="fa fa-angle-left fa-w-20"></i>
            </span>
            <span>Back</span>
        </a>
    </li>

    @if(str_contains(url()->current(), 'edit') || str_contains(url()->current(), 'create'))
        {{-- btn Save --}}
        <li class="nav-item">
            <button class="nav-link btn" type="submit">
            <span class="btn-icon-wrapper pr-2 opacity-8">
                <i class="fa fa-download fa-w-20"></i>
            </span>
                <span>Save</span>
            </button>
        </li>
    @else
        {{-- btn Edit --}}
        <li class="nav-item">
            <a href="{{ url()->current() . '/edit' }}"
               class="nav-link">
                        <span class="btn-icon-wrapper pr-2 opacity-8">
                            <i class="fa fa-edit fa-w-20"></i>
                        </span>
                <span>Edit</span>
            </a>
        </li>

        {{-- btn Delete --}}
        <li class="nav-item delete">
            <form action="{{ $urlMain . request()->segment(3)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="nav-link btn" type="submit"
                        onclick="return confirm('Do you really want to delete this item?')">
                        <span class="btn-icon-wrapper pr-2 opacity-8">
                            <i class="fa fa-trash fa-w-20"></i>
                        </span>
                    <span>Delete</span>
                </button>
            </form>
        </li>
    @endif

</ul>
