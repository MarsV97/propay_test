@if(Session::has('success'))
    <div class="fixed z-50 top-14 right-5 bg-green-500 text-white p-4 rounded-md shadow-lg flex items-start gap-4 animate__animated animate__bounceInRight">
        <button type="button" class="text-white hover:text-gray-200" data-bs-dismiss="alert" aria-label="Close">
            &times;
        </button>
        <span class="flex-1">{!! Session::get('success') !!}</span>
    </div>
@elseif(Session::has('error'))
    <div class="fixed z-50 top-14 right-5 bg-red-500 text-white p-4 rounded-md shadow-lg flex items-start gap-4 animate__animated animate__bounceInRight">
        <button type="button" class="text-white hover:text-gray-200" data-bs-dismiss="alert" aria-label="Close">
            &times;
        </button>
        <span class="flex-1">{!! Session::get('error') !!}</span>
    </div>
@endif
