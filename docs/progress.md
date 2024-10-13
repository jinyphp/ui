---
theme: ""
layout: "markdown"
title: "..."
breadcrumb:
  - "Docs"
---

# Progress

프로그레스는 주로 진행정도를 표시하기 위해 사용됩니다.

### class

bootstrap과 tailwind에 있는 유틸리티 클래스를 사용하여 변경이 가능합니다.

### pgStyle

pgStyle 사용하여 간단하게 바의 색깔을 변경할 수 있다.

- primary
- secondary
- success
- danger
- warning
- info
- ligth
- dark

### nowValue

nowValue 속성명을 사용하여 프로그레스바의 진행률을 설정할 수 있다.

### textColor

textColor 속성명을 사용하여 프로그레스바 안의 텍스트의 색깔을 설정할 수 있다.

- primary
- secondary
- success
- danger
- warning
- info
- ligth
- dark

### pgLabel

pgLabel 속성명 사용하여 aria-label 속성을 설정할 수 있다.

## x-progress-bar

`x-progress-bar`는 기본적인 progress 바를 생성할 수 있다.
aria-valuemin = "0" aria-valuemax = "100" 으로 기본 설정되어있으며
nowValue 속성명을 사용하여 진행정도를 표시할 수 있다.

```php
<x-progress-bar class="m-4 h-12" nowValue="70" pgStyle="success">70%</x-progress-bar>
<x-progress-bar nowValue="50" pgStyle="info" pgLabel="zmzmzm">50%</x-progress-bar>
<x-progress-bar nowValue="30" pgStyle="primary" textColor="success">30%</x-progress-bar>
```

## x-progress-bar-striped

`x-progress-bar-striped`는 striped를 추가하여 프로그레스 바의 배경색에 CSS 그라데이션으로 스프라이프를 적용한 progress 바를 생성할 수 있다.
aria-valuemin = "0" aria-valuemax = "100" 으로 기본 설정되어있으며
nowValue 속성명을 사용하여 진행정도를 표시할 수 있다.
기본설정은 `x-progress-bar`와 동일합니다.

```php
<x-progress-bar-striped class="m-4 h-12" nowValue="70" pgStyle="success">70%</x-progress-bar-striped>
<x-progress-bar-striped nowValue="50" pgStyle="info" pgLabel="zmzmzm">50%</x-progress-bar-striped>
<x-progress-bar-striped animated nowValue="30" pgStyle="primary" textColor="success">30%</x-progress-bar-striped>
```

### animated

`x-progress-bar-striped`이 스프라이프 형태의 그라데이션을 애니메이션화할 수 있다.
속성명으로 animated를 추가하면 애니메이션화가 가능합니다.

```php
<x-progress-bar-striped animated class="m-4 h-12" nowValue="70" pgStyle="success">70%</x-progress-bar-striped>
<x-progress-bar-striped animated nowValue="50" pgStyle="info" pgLabel="zmzmzm">50%</x-progress-bar-striped>
```

## x-progress-stack (중첩 프로그레스바)

`x-progress-stack`는 여러 개의 진행률 컴포넌트를 포함시켜 하나의 누적된 프로그레스 바를 만들 수 있습니다.

여러 누적되는 프로그레스 바는 `x-stack-bar`,`x-stack-bar-striped` 컴포넌트를 `x-progress-stack` 하위 요소로 넣어서 사용할 수 있습니다.
`x-stack-bar`,`x-stack-bar-striped` 는 `x-progress-bar`,`x-progress-bar-striped`와 동일하게 설정이 가능합니다.

```php
<x-progress-stack>
    <x-stack-bar nowValue="20" pgStyle="success">20%</x-stack-bar>
    <x-stack-bar nowValue="10" pgStyle="info" pgLabel="zmzmzm">10%</x-stack-bar>
    <x-stack-bar animated nowValue="30" pgStyle="primary" textColor="success">30%</x-stack-bar>
</x-progress-stack>

<x-progress-stack>
    <x-stack-bar-striped animated nowValue="20" pgStyle="success">20%</x-stack-bar-striped>
    <x-stack-bar-striped nowValue="10" pgStyle="info" pgLabel="zmzmzm">10%</x-stack-bar-striped>
    <x-stack-bar-striped animated nowValue="30" pgStyle="primary" textColor="success">30%</x-stack-bar>
</x-progress-stack>
```
