---
theme: ""
layout: "markdown"
title: "..."
breadcrumb:
  - "Docs"
---

# Tootip

툴팁 컴포넌트는 클릭 또는 마우스를 특정 구성 요소에 가져갔을 때 (hover) 상황에 맞는 도움말이나 정보를 표시해 줄 수 있는 컴포넌트입니다.

## 공통 요소

### class

bootstrap과 tailwind에 있는 유틸리티 클래스를 사용하여 변경이 가능합니다.

### data-bs-title

툴팁안에 출력되는 내용을 설정할 수 있습니다.

### data-bs-placement

툴팁이 나오는 방향을 설정할 수 있습니다

- top (default)
- bottom
- left
- right

## x-tooltip-link

`x-tooltip-link`는 링크를 생성하고 툴팁을 설정합니다.

```html
<x-tooltip-link data-bs-title="툴팁 내용" data-bs-placement="툴팁의 방향">
  내용...
</x-tooltip-link>

<x-tooltip-link
  class="m-4"
  data-bs-title="툴팁 내용"
  data-bs-placement="툴팁의 방향"
>
  내용...
</x-tooltip-link>
```

## x-tooltip-button

`x-link-tooltip`는 버튼을 생성하고 툴팁을 설정합니다.

```html
<x-tooltip-button data-bs-title="툴팁 내용" data-bs-placement="툴팁의 방향">
  Click Me!!!
</x-tooltip-button>

<x-tooltip-button
  class="p-4"
  data-bs-title="툴팁 내용"
  data-bs-placement="툴팁의 방향"
>
  버튼에 들어갈 내용
</x-tooltip-button>
```

### button type

버튼의 type를 설정하기 위해서는 btnType 속성을 추가해줄 수 있습니다.
default는 `button`으로 reset,submit 사용이 가능합니다.

```html
<x-tooltip-button
  type="submit"
  data-bs-title="툴팁 내용"
  data-bs-placement="툴팁의 방향"
>
  내용...
</x-tooltip-button>
<x-tooltip-button
  type="reset"
  data-bs-title="툴팁 내용"
  data-bs-placement="툴팁의 방향"
>
  내용...
</x-tooltip-button>
```

### button Style

버튼의 기본적인 style를 설정하기 위해서는 btnStyle 속성을 추가해줄 수 있습니다.
default는 `primary`으로 설정되어있으며 사용할 수 있는 값은 다음과 같습니다.

- primary (default)
- secondary
- success
- danger
- warning
- info
- light
- dark

```html
<x-tooltip-button
  type="submit"
  data-bs-title="툴팁 내용"
  data-bs-placement="툴팁의 방향"
>
  내용...
</x-tooltip-button>
<x-tooltip-button
  type="reset"
  data-bs-title="툴팁 내용"
  data-bs-placement="툴팁의 방향"
>
  내용...
</x-tooltip-button>
```
