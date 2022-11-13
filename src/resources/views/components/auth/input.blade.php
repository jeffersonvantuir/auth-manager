<div class="relative z-0 w-full group">
  <input
    id="{{ $id }}"
    type="{{ $type }}"
    name="{{ $name }}"
    value="{{ $value }}"
    label="{{ $label }}"
    autocomplete="off"
    placeholder=" "
    class="font-titillium-regular block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2
        appearance-none text-white focus:outline-none focus:ring-0 peer focus:border-color-jv-auth
        {{ $hasError ? 'border-red-500' : 'border-white-300'}}
    "
    />
    <label for="{{ $id }}" class="font-titillium-regular peer-focus:font-medium absolute text-sm text-white duration-300 transform
        -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-color-jv-auth
        peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
        {{ $label }}
    </label>
</div>