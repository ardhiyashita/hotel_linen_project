<div class="container flex flex-col sm:justify-center items-center">
<div class="w-full flex flex-col items-center" style="position: absolute;">       
    <div>
        {{ $logo }}
    </div>    

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
<img src="{{ asset('/img/rhema-kallianpur-uocSnWMhnAs-unsplash.jpg') }}"
    style="width: 1366px; height: 625px;">
</div>
