---
theme: ""
layout: "markdown"
title: "..."
breadcrumb:
  - "Docs"
---

# Toast

토스트는 알림메시지로 푸시 알림을 보낼 수 있다.

### class

bootstrap과 tailwind에 있는 유틸리티 클래스를 사용하여 변경이 가능합니다.

## x-toast

`x-toast`는 버튼으로 트리거 되는 toast를 생성합니다.

### 기본 골격

```php
<x-toast message="버튼 내용">
    <x-toast-header>
        header내용
    </x-toast-header>
    <x-toast-body>
        body내용
    </x-toast-body>
</x-toast>
```

### message

버튼에 들어갈 내용을 정의할 수 있는 변수

### x-toast-header

`x-toast-header`는 toast에 상단에 들어갈 내용을 정의할 수 있으며 닫기 버튼이 포함되어있습닏.

### x-toast-body

`x-toast-body`는 toast에 들어갈 메인 컨텐츠를 정의하는 부분
