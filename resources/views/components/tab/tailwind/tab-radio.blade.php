<div>
    @push('css')
    <style>
        /** jiny tabbar with radio */
        .jiny.tabbar {
            display: flex;
            flex-wrap: wrap;
        }

        .jiny.tabbar input[name="__tabbar"] {
            display: none;
        }
        .jiny.tabbar .tab-header {
            padding: 0.3rem;
            min-width: 8em;
            background: #ffffff;
            text-align: center;
            cursor: text;
            margin-bottom: -1px;
            /**z-index:2;*/
            border-bottom: 1px solid #cccccc;
        }


        .jiny.tabbar .tab-header:hover {
            background: {{$hover_background}}; /*#def2fb;*/
        }

        .jiny.tabbar label {
            padding-top: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .jiny.tabbar label:hover {
            color: {{$color}}; /*#2791ce;*/
        }

        .jiny.tabbar .tab-content {
            width: 100%;
            padding: 20px;
            background: #fff;
            order: 1;
            display: none;
            border-top: 1px solid #cccccc;
            /**z-index:1;*/

        }
        .jiny.tabbar .tab-content h2 {
            font-size: 3em;
        }

        .jiny.tabbar input[name="__tabbar"]:checked + .tab-header + .tab-content {
            display: block;
        }

        .jiny.tabbar input[name="__tabbar"]:checked + .tab-header {
            /* background: #e2e2e2; */
            border-bottom: 2px solid {{$color}};
        }

        .jiny.tabbar input[name="__tabbar"]:checked + .tab-header label {
            color: {{$color}};
        }

    </style>
    @endpush

    <div {{ $attributes->merge(['class' => 'jiny tabbar']) }}>
        {{$slot}}
    </div>
</div>
