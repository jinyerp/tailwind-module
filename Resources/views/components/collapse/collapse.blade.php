
<style>
    .xv:hover {
        --tw-text-opacity: 1;
        color: rgb(100 116 139 / var(--tw-text-opacity))
    }

    .au {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .as {
        --tw-rotate: 180deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .d {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0
    }
    .os {
        width: 2rem
    }
    .sf {
        height: 2rem
    }
    .du {
        fill: currentColor
    }
    .wy:first-child {
        padding-left: 1.25rem
    }
    .w_:last-child {
        padding-right: 1.25rem
    }
    .vo {
        padding-top: .75rem;
        padding-bottom: .75rem
    }
    .hp {
        --tw-bg-opacity: 1;
        background-color: rgb(248 250 252 / var(--tw-bg-opacity))
    }
    .dk {
        padding: .75rem
    }
    .rz {
        margin-top: -.75rem
    }
    .gm {
        font-style: italic
    }
</style>


<section class="text-sm bg-white" x-data="{ open: false }">
    <article class="p-4">
        <div class="flex">
            <div class="flex-none w-14 h-14">
                01
            </div>
            <div class="grow h-14">
                {{$slot}}
            </div>

            {{-- collpase 버튼--}}
            @if(isset($description))
            <div class="flex-none w-14 h-14">
                <div class="flex items-center">
                    <button class="text-slate-400 xv au as" :class="{ 'as': open }"
                        @click.prevent="open = !open" :aria-expanded="open"
                        aria-controls="description-01" aria-expanded="true">
                        <span class="d">Menu</span>
                        <svg class="os sf du" viewBox="0 0 32 32">
                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            @endif
        </div>
    </article>

    {{-- 설명 --}}
    @if(isset($description))
    <article id="description-01" role="region" x-show="open" style="">
        <div colspan="10" class="px-2 wy w_ vo">
            <div class="flex items-center hp dk rz">
                <div class="gm">
                    {{$description}}
                </div>
            </div>
        </div>
    </article>
    @endif
</section>

