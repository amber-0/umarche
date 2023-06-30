<x-tests.app>
  <x-slot name="header">ヘッダー</x-slot>
  コンポーネントテスト1

  <x-tests.card title="タイトル1" content="内容1" :message="$message"></x-tests.card>
  <x-tests.card title="タイトル1" ></x-tests.card>
</x-tests.app>
