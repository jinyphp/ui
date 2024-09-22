---
theme: ""
layout: "markdown"
title: "..."
breadcrumb:
  - "Docs"
---

# popover

팝오버는 특정 구성 요소를 클릭했을때 상황에 알맞은 메세지를 나오게 할 수 있는 컴포넌트 입니다.

### class

bootstrap과 tailwind에 있는 유틸리티 클래스를 사용하여 변경이 가능합니다.

### data-bs-title

팝오버 메세지에 출력되는 제목을 설정할 수 있습니다.

### data-bs-content

팝오버 메세지에 출력되는 내용을 설정할 수 있습니다.

### data-bs-placement

팝오버가 나오는 방향을 설정할 수 있습니다

- top (default)
- bottom
- left
- right

## btType

버튼의 기본 색상을 지정해 줄 수 있는 속성명입니다.

- primary
- secondary
- success
- danger
- warning
- info
- ligth
- dark

## x-popover

`x-tooltip`는 클릭할 수 있는 버튼을 생성하고 툴팁을 설정합니다.

```html
<x-popover
  data-bs-title="팝오버 제목"
  data-bs-content="팝오버 내용"
  data-bs-placement="팝오버의 방향"
>
  내용...
</x-popover>

<x-popover
  class="m-4"
  data-bs-title="팝오버 제목"
  data-bs-content="팝오버 내용"
  data-bs-placement="팝오버의 방향"
>
  내용...
</x-popover>
```

### button type

버튼의 type를 설정하기 위해서는 type를 추가해줄 수 있습니다.
default는 button으로 reset,submit 사용이 가능합니다.

```html
<x-tooltip-button
  type="submit"
  data-bs-title="팝오버 제목"
  data-bs-content="팝오버 내용"
  data-bs-placement="팝오버의 방향"
>
  내용...
</x-tooltip-button>
<x-tooltip-button
  type="reset"
  data-bs-title="팝오버 제목"
  data-bs-content="팝오버 내용"
  data-bs-placement="팝오버의 방향"
>
  내용...
</x-tooltip-button>
```
