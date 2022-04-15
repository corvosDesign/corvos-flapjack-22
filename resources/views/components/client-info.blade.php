<div class="grid grid-cols-3 w-full text-blueline gap-2">
<div class="col-start-1">
    <p class="capitalize">{{$company->name}}</p>
</div>
<div class="col-start-2">
    <p class="capitalize">{{$company->address_line1}}</p>
</div>
<div class="col-start-3">
    <div class=""><a href="tel:{{$company->phone}}">{{$company->phone}}</a><span>&nbsp ext:{{$company->extension}}</span></div>
</div>
</div>
