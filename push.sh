#!/bin/sh

# Archivo que travis ejecuta una vez las pruebas fueron ejecutadas con éxito
# Lo que hace es pushear el respectivo commit a otra branch

setup_git() {
  git config --global user.email "travis@travis-ci.org"
  git config --global user.name "Travis CI"
}

commit_website_files() {
  git checkout -b PruebaStage
  git pull
  git add .
  git commit --message "Travis build: $TRAVIS_BUILD_NUMBER"
}

upload_files() {
  git remote add origin-pages https://${GH_TOKEN}@github.com/her17138/ProyectoIngSoftware.git > /dev/null 2>&1
  git push --quiet --set-upstream origin-pages PruebaStage
}

setup_git
commit_website_files
upload_files