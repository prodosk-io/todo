<div class="header">
    <div class="overlay"></div>
    <div class="partOne">
        @if (Auth::check())
        <section class="logout">
            <a href="/logout"> Chikish yop </a>
            
        </section>
        <section class="welcome">
            Hosh geldin <span class="userName">{{$user->name}}</span>
        </section>
        @else
        <section class="register">
            Uye ol
        </section>
        <section class="signIn">
            Girish yap
        </section>
        @endif
    </div>
    
   
    <br>
    <div class="modalForSingIn" style="display: none">
        <form id="signInForm" >
            <label for="emailOfUser">Isminiz</label>
            <input type="text" id="emailOfUser" name="emailOfUser" required>
            <label for="password">Shifreniz</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Hadi bakalim</button>
            <button class="closeSignInForm"> Kapat</button>
        </form>
    </div>
    <div class="modalForRegister" style="display: none">
        <form id="registerForm">
            <label for="name">Isminiz yazin:</label>
            <input type="text" id="registerName" name="registerName" required>
            <label for="email">Email yazin:</label>
            <input type="text" id="email" name="email" required>
            <label for="registerPassword">Shifre olusturun</label>
            <input type="password" id="registerPassword" name="registerPassword" required>
            <label for="retyperegisterPassword">Shifre tekrar</label>
            <input type="password" id="retyperegisterPassword" name="retyperegisterPassword" required>
            <button type="submit">Beni uye et</button>
            <button class="closeRegisterForm">Kapat</button>
        </form>
        
    </div>
</div>