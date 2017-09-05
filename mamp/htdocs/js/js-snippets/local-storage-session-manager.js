
// Add the session parameter to an URL.

function addSession(url) {
  return url + '?session=' + getSession();
}

// A simple session manager based on a 
// random string stored in the localStorage

function getSession() {
  var session = localStorage.getItem('session');
  if (!session) {
    session = '' + Date.now() + '-' + Math.random();
    localStorage.setItem('session', session);
  }
  return session;
}

