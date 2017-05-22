<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html"><img class="logo" src="img/logo.png" alt="logo.png">
  </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="hvr-fade-green"><a href="#">À propos</a></li>
      <li class="hvr-fade-green"><a href="partenaires.html">Nos partenaires</a></li>
      <li class="hvr-fade-green"><a href="#contact-us">Contactez-nous</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="hvr-fade-green"><a href="#inscription">Inscription</a></li>
      <li class="hvr-fade-green"><a href="#login">Login <img src="img/login.png" alt="login.png"></a></li>
    </ul>
  </div>
</nav>

<div class="overlay" id="contact-us">

<form>
      <div>
      <img class ="logo-formulaire" src="img/logo-developont.png" alt="">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="user_name">
      </div>

      <div>
        <label for="courriel">Courriel</label>
        <input type="email" id="courriel" name="user_email">
      </div>

      <div>
        <label for="message">Message</label>
        <textarea id="message" name="user_message"></textarea>
      </div>
     
      <div class="button">
        <button type ="close"><a href="#close">Fermer le formulaire</a></button>
        <button type="submit">Envoyer votre message</button>
      </div>
  </form>

</div>

<div class="overlay" id="inscription">

<form>
      <div>
      <img class ="logo-formulaire" src="img/logo-developont.png" alt="">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="user_name">
      </div>

    <div>
        <label for="prénom">Prénom</label>
        <input type="text" id="prénom" name="user_surname">
      </div>

      <div>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="user_email">
      </div>

      <div>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="user_password">
      </div>

    <div>
        <label for="password">Confirmation</label>
        <input type="password" id="password" name="user_password">
      </div>

      <div class="button">
        <button type ="close"><a href="#close">Fermer</a></button>
        <button type="submit">S'inscrire</button>
      </div>
  </form>

</div>

<div class="overlay" id="login">

<form>
      <div>
      <img class ="logo-formulaire" src="img/logo-developont.png" alt="logo">
        <label for="pseudo">Pseudonyme</label>
        <input type="text" id="pseudo" name="pseudo">
      </div>

    <div>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="user_password">
      </div>

      <div class="button">
        <button type ="close"><a href="#close">Fermer</a></button>
        <button type="submit">Connexion</button>
      </div>
  </form>

</div>
