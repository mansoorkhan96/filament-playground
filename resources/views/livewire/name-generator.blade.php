<div>
    <ul class="flex flex-col gap-2">
        @foreach ($aiGeneratedNames as $name)
            <li
                class="cursor-pointer"
                @click="$wire.$parent.callMountedFormComponentAction(@js(['name' => $name]))"
            >
                {{ $name }}
            </li>
        @endforeach
    </ul>
</div>
