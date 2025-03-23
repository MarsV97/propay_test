<div>
    <style>
      .custom-table {
        border-spacing: 0;
        width: 100%;
        border-collapse: collapse;
      }

      .custom-table thead td {
        font-weight: bold;
        border: 1px solid #dee2e6;
        background-color: #ffffff;
        padding: 10px;
      }

      .custom-table tbody {
        background-color: #f5f5f5;
      }

      .custom-table td {
        padding: 10px;
        border: 1px solid #dee2e6;
      }

      .custom-table tr {
        border: 1px solid #dee2e6;
      }
      .text-green {
        color: green;
      }

    </style>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"
                                     style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; padding-bottom: 10px; padding-right: 20px;">
                                    <h3 class="card-title" style="flex: 1; text-align: center; font-size: 24px;"><strong>User Details</strong></h3>
                                    <a href="{{ route('user-details.create') }}"
                                       class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-md shadow mt-6">
                                        Create User
                                    </a>
                                </div>
                                <div class="card-body">
                                    <table class="table custom-table">
                                        <thead>
                                        <tr>
                                            <td>Name</td>
                                            <td>Email</td>
                                            <td>Mobile</td>
                                            <td>South African Id</td>
                                            <td>Date Of Birth</td>
                                            <td>Interests</td>
                                            <td>Language</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($usersDetails)
                                            @foreach($usersDetails as $usersDetail)
                                                <tr>
                                                    <td>{{ $usersDetail->user->name }}</td>
                                                    <td>{{ $usersDetail->user->email }}</td>
                                                    <td>{{ $usersDetail->mobile }}</td>
                                                    <td>{{ $usersDetail->south_african_id }}</td>
                                                    <td>{{ $usersDetail->date_of_birth }}</td>
                                                    <td>
                                                        <ul>
                                                            @foreach($usersDetail->interests as $interest)
                                                                <li>
                                                                    {{$interest->name}}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            @foreach($usersDetail->languages as $language)
                                                                <li>
                                                                    {{ $language->name }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td class="flex flex-col gap-4">
                                                        <a href="{{ route('user-details.edit', $usersDetail->id) }}"
                                                           class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-md shadow">
                                                            Update
                                                        </a>
                                                        <button wire:click="deleteUser({{ $usersDetail }})"
                                                                class="btn rounded-md bg-red-500 text-white px-4 py-2 hover:bg-red-700">
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="8">No Records found</td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
