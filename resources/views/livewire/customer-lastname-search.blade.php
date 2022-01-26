<div class="container">
    <div class="row">
        <div class="col-md-12">

            <input type="text"  class="form-control" placeholder="Type to search" wire:model="searchTerm" />

            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
                @foreach($customers as $customer)
                    <tr>
                        <td>
                            {{ $customer->title }}
                        </td>
                        <td>
                            {{ $customer->firstname }}
                        </td>
                        <td>
                            <a href="{{ route('customer.show',$customer->id) }}">{{ $customer->lastname }}</a>
                        </td>

                    </tr>
                @endforeach
            </table>
            {{ $customers->links() }}
        </div>
    </div>
</div>

