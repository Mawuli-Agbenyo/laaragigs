 @props(['key'])
<X-card>
 <div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$key->logo ? asset('storage/' . $key->logo) : asset('/images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/search/{{$key->id}}">{{$key->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$key->company}}</div>
            <x-data-tags :tags="$key->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{$key->location}} 
        </div>
        </div>
    </div>
</div>

</X-card>