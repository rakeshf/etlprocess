pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        git(url: 'git@github.com:rakeshf/etlprocess.git', branch: 'master')
      }
    }
    stage('Prepaire') {
      steps {
        sh 'echo $WORKSPACE'
      }
    }
  }
}