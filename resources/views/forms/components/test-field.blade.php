<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <span
        x-on:click="
            $wire.mountFormComponentAction(@js($getStatePath()), 'foo', {
                baz: 'baz',
            })
        "
    >
        {{ $getAction('foo') }}
    </span>
</x-dynamic-component>
