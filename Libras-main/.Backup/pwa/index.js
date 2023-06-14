window.addEventListener("load", () => {
  registerSW();
});

async function registerSW() {
  if ("serviceWorker" in navigator) {
    try {
      await navigator.serviceWorker.register("./pwa/sw.js");
    } catch (e) {
        console.log('SW registration failed');
        console.dir(e);
    }
  }
}


//CLASSES EM JS

class Person {
  constructor(name){
    this._name = this._capitalize(name)
  }

  set name(string){
    this._name = this._capitalize(string)
  }

  get name(){
    return this._name
  }

  _capitalize(string){
    return `${string.charAt(0).toUpperCase()}${string.slice(1)}`
  }

  walk(){
    return `${this._name} está andando.`
  }
}

class Developer extends Person{
  constructor(name, codeLanguage){
    super(name)
    this._codeLanguage = codeLanguage
  }

  code(){
    return `${this._name} está codando em ${this._codeLanguage}`
  }
}

//var person = new Person('tiago')
//console.log(person.name)

//let brendan = new Developer('alexandre', 'JavaScript')
//console.log(brendan.code())

//let bert = new Developer('mathues', 'CSS')
//console.log(bert.code())