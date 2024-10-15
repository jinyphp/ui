---
theme: ""
layout: "markdown"
title: "..."
breadcrumb:
  - "Docs"
---

# placeholder

컴포넌트나 페이지에 아직 로딩중임을 나타내줄 수 있는 컴포넌트

### class

bootstrap과 tailwind에 있는 유틸리티 클래스를 사용하여 변경이 가능합니다.

## type

플레이스홀더의 기본 색상을 지정해 줄 수 있는 속성명입니다.

- primary
- secondary
- success
- danger
- warning
- info
- ligth
- dark

## size

기본적으로 설정되어있는 크기 조정자입니다.

- xs
- sm
- null (default)
- lg

## column

클래스에 col-{{column}} 의 형식으로 설정 해줍니다.

## percent

플레이스 홀더의 너비를 퍼센테이지로 설정하고 싶을 때 사용할 수 있습니다.

- 0~100 까지의 정수를 입력해주면됩니다.

## x-placeholder

`x-placeholder` 는 기본 플레이스 홀더를 생성할 수 있는 컴포넌트 입니다.

```html
<x-placeholder percent=20 type="primary" size="lg"> </x-placeholder>

<x-placeholder class="m-4" column=4> </x-placeholer>
```

### x-placeholder-wave, x-placeholder-grow

플레이스홀더에 애니메이션을 추가하기 위하여 추가할 수 있는 컴포넌트입니다.

```html
<x-placeholder-wave>
  <x-placeholder> </x-placeholder>
  <x-placeholder> </x-placeholder>
  <x-placeholder> </x-placeholder>
</x-placeholder-wave>

<x-placeholder-grow>
  <x-placeholder> </x-placeholder>
  <x-placeholder> </x-placeholder>
  <x-placeholder> </x-placeholder>
</x-placeholder-grow>
```
