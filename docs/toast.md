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

```html
<x-toast btnMessage="버튼 내용" btnStyle="info" toastId="OneToast">
  <x-toast-header> header내용 </x-toast-header>
  <x-toast-body> body내용 </x-toast-body>
</x-toast>
```

### btnMessage

버튼에 들어갈 내용을 정의할 수 있는 속성명입니다.

### btnStyle

버튼의 스타일을 지정해 줄 수 있는 속성명으로 다음과 같은 값을 사용할 수 있습니다.

- primary (default)
- secondary
- success
- danger
- warning
- info
- light
- dark

### toastId

버튼과 팝업되는 toast를 연결해주는 Id로 하나의 툴팁만을 생성할 경우 생략해도됩니다. 하지만 여러 토스트를 동시에 쓸 경우 각각 다른 값으로 설정해 주어야합니다.

### btnType

버튼의 type를 설정하기 위해서는 btnType 속성을 추가해줄 수 있습니다.
default는 `button`으로 reset,submit 사용이 가능합니다.

### x-toast-header

`x-toast-header`는 toast에 상단에 들어갈 내용을 정의할 수 있으며 닫기 버튼이 포함되어있습니다.

### x-toast-body

`x-toast-body`는 toast에 들어갈 메인 컨텐츠를 정의하는 부분입니다.
