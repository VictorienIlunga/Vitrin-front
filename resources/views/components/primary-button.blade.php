<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full flex justify-center items-center py-2  bg-[#8259fd] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#6546c0] focus:bg-[#6546c0] active:bg-[#6546c0] focus:outline-none  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
