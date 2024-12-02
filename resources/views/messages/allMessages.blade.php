@if (session()->has('success_message'))
    <div class="w-full bg-green-200 p-3">
        <strong class="text-white" >{{ session()->get('success_message') }}</strong>
    </div>
@endif
@if (session()->has('warning_message'))
    <div class="w-full bg-orange-200 p-3">
        <strong class="text-white">{{ session()->get('warning_message') }}</strong>
    </div>
@endif
@if (session()->has('error_message'))
    <div class="w-full bg-red-200 p-3">
        <strong class="text-white">{{ session()->get('error_message') }}</strong>
    </div>
@endif