---
theme: "adminkit"
layout: "markdown"
title: "xGroup"
breadcrumb:
    - "Docs"
---

# xCollapse

## Button

```php
<x-collapse>
    <x-collapse-button>
        button with data-bs-target
    </x-collapse-button>

    <x-collapse-body>
        <div class="border p-4 mt-2">
            Some placeholder content for the collapse component. 
            This panel is hidden by default but revealed when the user activates the relevant trigger.
        </div>
    </x-collapse-body>
</x-collapse>
```

## link

```php
<x-collapse>
    <x-collapse-link>
        Link with href
    </x-collapse-link>

    <x-collapse-body>
        <div class="border p-4 mt-2">
            Some placeholder content for the collapse component. 
            This panel is hidden by default but revealed when the user activates the relevant trigger.
        </div>
    </x-collapse-body>
</x-collapse>
```