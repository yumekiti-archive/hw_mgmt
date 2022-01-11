    <p>招待コード</p>
    <p>{{ $company->invitation_token }}</p>

    <p>招待URL</p>
    @if($company->invitation_token)
        <p>http://join/{{ $invite->token }}</p>
    @endif

    <a href="{{ route('enterprise.create_invitation_url') }}" class="btn btn-success">作成</a>
