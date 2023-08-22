@extends('../base')

@section('content')
<div class="container mx-auto p-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-semibold mb-4">My Profile</h1>
        <div class="mb-4">
            <label class="text-gray-600">Username:</label>
            <p class="text-gray-900">{{ $user->username }}</p>
        </div>
        <div class="mb-4">
            <label class="text-gray-600">Email:</label>
            <p class="text-gray-900">{{ $user->email }}</p>
        </div>
        <div class="mb-4">
            <label class="text-gray-600">Phone Number:</label>
            <p class="text-gray-900">{{ $user->phone_int }}</p>
        </div>
        <div class="mb-4">
            <label class="text-gray-600">User Type:</label>
            <p class="text-gray-900">{{ $user->type == 1 ? "Admin" : "Basic User" }}</p>
        </div>
        <div class="mb-4 flex justify-end align-center">
            <form action="" method="POST" class="mx-5">
                @csrf
                @method('update')
                <button type="submit">
                    Update
                </button>
            </form>
            <form action="" method="POST" class="mx-5">
                @csrf
                @method('delete')
                <button type="submit">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

