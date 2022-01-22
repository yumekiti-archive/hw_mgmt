[issues_課題管理くん](https://hackmd.io/@2uWHWfDXTSmSmh_QJTqYfA/HkMxzpbrY)
===
###### tags: `課題管理くん`

---

# List
- #47 [フロントエンド用開発環境作成](#フロントエンド用開発環境作成)
- #43 [taskマイグレーション変更](#taskマイグレーション変更)
- #35 [ダッシュボードの作成](#ダッシュボードの作成)
- #34 [登録ページの作成](#登録ページの作成)
- #33 [POST_loginの作成](#POST_loginの作成)
- #32 [ログインページの作成](#ログインページの作成)
- #31 [Vueプロジェクトの作成](#Vueプロジェクトの作成)
- #30 [DELETE_inviteの作成](#DELETE_inviteの作成)
- #29 [GET_inviteの作成](#GET_inviteの作成)
- #28 [DELETE_taskの作成](#DELETE_taskの作成)
- #27 [PUT_taskの作成](#PUT_taskの作成)
- #26 [POST_taskの作成](#POST_taskの作成)
- #25 [GET_taskの作成](#GET_taskの作成)
- #24 [DELETE_lessonの作成](#DELETE_lessonの作成)
- #23 [PUT_lessonの作成](#PUT_lessonの作成)
- #22 [POST_lessonの作成](#POST_lessonの作成)
- #21 [GET_lessonの作成](#GET_lessonの作成)
- #20 [DELETE_timetableの作成](#DELETE_timetableの作成)
- #19 [PUT_timetableの作成](#PUT_timetableの作成)
- #18 [POST_timetableの作成](#POST_timetableの作成)
- #17 [GET_timetableの作成](#GET_timetableの作成)
- #16 [DELETE_userの作成](#DELETE_userの作成)
- #15 [PUT_userの作成](#PUT_userの作成)
- #14 [POST_userの作成](#POST_userの作成)
- #13 [GET_userの作成](#GET_userの作成)
- #11 [Timetableテストデータ](#Timetableテストデータ)
- #8 [Inviteテストデータ](#Inviteテストデータ)
- #7 [Taskテストデータ](#Taskテストデータ)
- #6 [Lessonテストデータ](#Lessonテストデータ)
- #5 [Timetableマイグレーションの作成](#Timetableマイグレーションの作成)
- #4 [Inviteマイグレーションの作成](#Inviteマイグレーションの作成)
- #3 [Taskマイグレーションの作成](#Taskマイグレーションの作成)
- #2 [Lessonマイグレーションの作成](#Lessonマイグレーションの作成)
- #1 [Laravelの作成](#Laravelの作成)

---

# フロントエンド用開発環境作成
## docker/#47/front
yumekiti頑張れ。

# taskマイグレーション変更
## api/#43/taskMigration
詳細を入れ忘れていたので変更お願いします。

### tasks(課題)
| name | type | unique | nullable |
|-|-|-|-|
| id | bigIncrements | yes|
| detail | string | | yes |
| lesson_id | bigInt |||
| user_id | bigInt |||
| achievement_count | Int |
| timestamps |

---

# ダッシュボードの作成
## client/#35/dashboard_page

### 概要
ダッシュボード作成する

### 参考
<img src="https://pbs.twimg.com/media/FD7_zOTaAAAPaSz?format=jpg&name=large" style="height: 200px" />

---

# ユーザー登録ページの作成
## client/#34/registration_page

### 概要
`/user`にPOSTしユーザーを登録できるようにする

### 参考
https://jp.vuejs.org/v2/cookbook/using-axios-to-consume-apis.html

---

# POST_loginの作成
## api/#33/POST_login

### 概要
自分のタスクを追加する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| email | string | メールアドレス |
| password | string | パスワード |

```json=
{
    "achievement_count":1,
    "lesson_id":1
}
```

### レスポンス

```json=
return ['message' => 'ログインしました。'];
```

---

# ログインページの作成
## client/#32/login_page

### 概要
`/login`にPOSTしログインできるようにする

### 参考
https://jp.vuejs.org/v2/cookbook/using-axios-to-consume-apis.html

---

# Vueプロジェクトの作成
## client/#31/create_vue

### 概要
名前は`vue`で作成してください。

### 参考
```
vue create vue
```

---

# DELETE_inviteの作成
## api/#30/DELETE_invite

### 概要
自分の招待(invite)を削除する

### レスポンス
response(null, 204);

---

# GET_inviteの作成
## api/#29/GET_invite

### 概要
相手の招待(invite)を受け取り中間テーブルに追加する

### レスポンス

```json=
{
    "invite_user_id":2,
    "user_id":1
}
```

---

# DELETE_taskの作成
## api/#28/DELETE_task

### 概要
自分のタスクを削除する

### レスポンス
response(null, 204);

---

# PUT_taskの作成
## api/#27/PUT_task

### 概要
自分のタスクを編集する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| achievement_count | number | 達成 |
| lesson_id | number | 授業id |

```json=
{
    "achievement_count":1,
    "lesson_id":1,
}
```

### レスポンス

```json=
{
    "id":1,
    "achievement_count":1,
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30",
    "lesson_id":1,
    "usr_id":1
}
```

---

# POST_taskの作成
## api/#26/POST_task

### 概要
自分のタスクを追加する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| achievement_count | number | 達成 |
| lesson_id | number | 授業id |

```json=
{
    "achievement_count":1,
    "lesson_id":1
}
```

### レスポンス

```json=
{
    "id":1,
    "achievement_count":1,
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30",
    "lesson_id":1,
    "usr_id":1
}
```

---

# GET_taskの作成
## api/#25/GET_task

### 概要
自分のタスクを取得する

### レスポンス

```json=
[
    {
        "id":1,
        "achievement_count":1,
        "created_at":"2021-11-10 10:04:30",
        "updated_at":"2021-11-10 10:04:30",
        "lesson_id":1,
        "usr_id":1
    },
    {
        "id":2,
        "achievement_count":1,
        "created_at":"2021-11-10 10:04:30",
        "updated_at":"2021-11-10 10:04:30",
        "lesson_id":1,
        "usr_id":1
    }
]
```

---

# DELETE_lessonの作成
## api/#24/DELETE_lesson

### 概要
自分のレッスンを削除する

### レスポンス
response(null, 204);

---

# PUT_lessonの作成
## api/#23/PUT_lesson

### 概要
自分のレッスンを編集する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |

```json=
{
    "id":1,
    "title":"huga",
    "limit":1
}
```

### レスポンス

```json=
{
    "id":1,
    "title":"huga",
    "limit":1,
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30"
}
```

---

# POST_lessonの作成
## api/#22/POST_lesson

### 概要
自分のレッスンを追加する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| title | string | 授業名 |
| limit | number | 期限 |

```json=
{
    "title":"hoge",
    "limit":1
}
```

### レスポンス

```json=
{
    "id":1,
    "title":"hoge",
    "limit":1,
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30"
}
```

---

# GET_lessonの作成
## api/#21/GET_lesson

### 概要
自分のレッスンを取得する

### レスポンス

```json=
[
    {
        "id":1,
        "title":"hoge",
        "limit":1,
        "created_at":"2021-11-10 10:04:30",
        "updated_at":"2021-11-10 10:04:30"
    },
    {
        "id":2,
        "title":"hoge",
        "limit":1,
        "created_at":"2021-11-10 10:04:30",
        "updated_at":"2021-11-10 10:04:30"
    }
]
```

---

# DELETE_timetableの作成
## api/#20/DELETE_timetable

### 概要
自分のタイムテーブルを削除する

### レスポンス
response(null, 204);

---

# PUT_timetableの作成
## api/#19/PUT_timetable

### 概要
自分のタイムテーブルを編集する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| week_count | number | 曜日 |
| period | number | 何限目 |
| lesson_id | number | 授業id |

```json=
{
    "week_count":1,
    "period":1,
    "lesson_id":1
}
```

### レスポンス
変更した内容を返す

```json=
{
    "id":1,
    "week_count":1,
    "period":1,
    "lesson_id":1
}
```

---

# POST_timetableの作成
## api/#18/POST_timetable

### 概要
自分のタイムテーブルを追加する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| week_count | number | 曜日 |
| period | number | 何限目 |
| lesson_id | number | 授業id |

```json=
{
    "week_count":1,
    "period":1,
    "lesson_id":1
}
```

### レスポンス
登録した内容を返す

```json=
{
    "id":1,
    "week_count":1,
    "period":1,
    "lesson_id":1
}
```

---

# GET_timetableの作成
## api/#17/GET_timetable

### 概要
自分のタイムテーブルを取得する

### レスポンス

```json=
[
    {    
        "id":1,
        "week_count":1,
        "period":1,
        "user_id":1,
        "lesson_id":1
    },
    {
        "id":2,
        "week_count":1,
        "period":1,
        "user_id":1,
        "lesson_id":1
    }
]
```

---

# DELETE_userの作成
## api/#16/DELETE_user

### 概要
userを削除する

### レスポンス
response(null, 204);

---

# PUT_userの作成
## api/#15/PUT_user

## PUT_user

### 概要
user情報を編集する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| name | string | ユーザー名 |
| email | string | メールアドレス |
| password | string | パスワード |

### レスポンス
編集後のユーザー情報を返す

```json=
{
    "id":1,
    "name":"test1",
    "email":"test1@test.jp",
    "email_verified_at":"2021-11-10 10:04:30",
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30"
}
```

---

# POST_userの作成
## api/#14/POST_user

### 概要
user登録する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| name | string | ユーザー名 |
| email | string | メールアドレス |
| password | string | パスワード |

```json=
{
    "name":"test1",
    "email":"test1@test.jp",
    "password":"testtest"
}
```

### レスポンス
登録した内容を返す

```json=
{
    "id":1,
    "name":"test1",
    "email":"test1@test.jp",
    "email_verified_at":"2021-11-10 10:04:30",
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30"
}
```

---

# GET_userの作成
## api/#13/GET_user

### 概要
認証済みなら自分のユーザー情報を返す

### レスポンス
ユーザー情報を返す

```json=
{
    "id":1,
    "name":"test1",
    "email":"test1@test.jp",
    "email_verified_at":"2021-11-10 10:04:30",
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30"
}
```

---

# Timetableテストデータ
## api/#11/TimetableTableSeeder

## シーダーの作成
```
php artisan make:seeder TimetableTableSeeder
```

## テストデータ
| week_count | period | user_id | lesson_id |
|-|-|-|-|
| 1 | 2 | 1 | 1 |
| 1 | 1 | 1 | 1 |
| 2 | 1 | 1 | 2 |
| 3 | 1 | 1 | 3 |
| 4 | 1 | 1 | 4 |
| 5 | 1 | 1 | 5 |

## 参考
```php=
for($i = 0; $i < 5; $i++){
    DB::table('timetables')->insert([
        'period' => 1,
        'week_count' => ($i + 1),
        'user_id' => 1,
        'lesson_id' => ($i + 1)
    ]);
}
```

### Timetable(時間割)
| name | type | unique | nullable |
|-|-|-|-|
| id | bigIncrements | yes|
| week_count | Int |  |  |
| period | Int | | |
| user_id | bigInt |  |  |
| lesson_id | bigInt |  |  |


---

# Inviteテストデータ
## api/#8/InviteTableSeeder

## シーダーの作成
```
php artisan make:seeder InviteTableSeeder
```

## テストデータ
| user_id | invite_user_id | token |
|-|-|-|
| 1 | 2 | 'hogehoge' |

## 参考
```php=
DB::table('invites')->insert([
    'user_id' => 1,
    'invite_user_id' => 2,
    'token' => 'hogehoge'
]);
```

### Invites(招待)
| name | type | unique | nullable |
|-|-|-|-|
| user_id | bigInt |  |  |
| invite_user_id | bigInt |  |  |
| token | string | yes | null ok |

---

# Taskテストデータ
## api/#7/TaskTableSeeder

## シーダーの作成
```
php artisan make:seeder TaskTableSeeder
```

## テストデータ
| id | lesson_id | user_id | achievement_count | timestamps |
|-|-|-|-|-|
| 1 | 1 | 1 | 0 | DateTime |
| 2 | 2 | 1 | 0 | DateTime |
| 3 | 3 | 1 | 0 | DateTime |

## 参考
```php=
for($i = 0; $i < 3; $i++){
    DB::table('tasks')->insert([
        'lesson_id' => ($i + 1),
        'user_id' => 1,
        'achievement_count' => 0,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime()
    ]);
}
```

### tasks(課題)
| name | type | unique | nullable |
|-|-|-|-|
| id | bigIncrements | yes|
| lesson_id | bigInt |||
| user_id | bigInt |||
| achievement_count | Int |
| timestamps |

---

# Lessonテストデータ
## api/#6/LessonTableSeeder

## シーダーの作成
```
php artisan make:seeder LessonTableSeeder
```

## テストデータ
| id | title | limit | timestamps |
|-|-|-|-|
| 1 | 授業1 | DateTime() | DateTime() |
| 2 | 授業2 | DateTime() | DateTime() |
| 3 | 授業3 | DateTime() | DateTime() |
| 4 | 授業4 | DateTime() | DateTime() |
| 5 | 授業5 | DateTime() | DateTime() |
| 6 | 授業6 | DateTime() | DateTime() |
| 7 | 授業7 | DateTime() | DateTime() |
| 8 | 授業8 | DateTime() | DateTime() |
| 9 | 授業9 | DateTime() | DateTime() |
| 10 | 授業10 | DateTime() | DateTime() |

## 参考
```php=
$titles = [null];

for($i = 0; $i < 10; $i++){
    $titles[$i] = '授業' + ($i + 1);
}

foreach ($titles as $title) {
    DB::table('lessons')->insert([
        'title' => $title,
        'limit' => new DateTime(),
        'created_at' => new DateTime(),
        'updated_at' => new DateTime()
    ]);
}
```

### lessons(授業)
| name | type | unique | nullable|
|-|-|-|-|
|id|bigIncrements| yes
| title | string |  | 
| limit | bigInt |
|timestamps |

---

# Timetableマイグレーションの作成
## api/#5/TimetableMigration

## モデルとマイグレーションの作成
```
php artisan make:model Timetable --migration
```

### Timetable(時間割)
| name | type | unique | nullable |
|-|-|-|-|
| id | bigIncrements | yes| |
| week_count | Int |  |  |
| period | Int | | |
| user_id | bigInt |  |  |
| lesson_id | bigInt |  |  |

---

# Inviteマイグレーションの作成
## api/#4/InviteMigration

## モデルとマイグレーションの作成
```
php artisan make:model Invite --migration
```

### Invites(招待)
| name | type | unique | nullable |
|-|-|-|-|
| user_id | bigInt |  |  |
| invite_user_id | bigInt |  |  |
| token | string | yes | null ok |

---

# Taskマイグレーションの作成
## api/#3/TaskMigration

## モデルとマイグレーションの作成
```
php artisan make:model Task --migration
```

### tasks(課題)
| name | type | unique | nullable |
|-|-|-|-|
| id | bigIncrements | yes|
| lesson_id | bigInt |||
| user_id | bigInt |||
| achievement_count | Int |
| timestamps |

---

# Lessonマイグレーションの作成
## api/#2/LessonMigration

## モデルとマイグレーションの作成
```
php artisan make:model Lesson --migration
```

## マイグレーションの編集
### lessons(授業)
| name | type | unique | nullable|
|-|-|-|-|
|id|bigIncrements| yes | |
| title | string |  | 
| limit | bigInt |
|timestamps |

---

# Laravelの作成
## api/#1/laravel

[Laravelのテンプレート](https://github.com/yumekiti/Laravel)からLaravelのディレクトリを作成する

---