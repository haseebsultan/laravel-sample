pipeline {
    agent any
  
    stages {
        stage('Build') {
            steps {
                sh 'docker-compose down'
                sh 'docker-compose up -d'
                sh 'docker exec -it laravel_project-1_app_1 bash'
                sh 'chown -R www-data:www-data'
                sh 'php artisan key:generate'
            }
        }
      
       
    }
}
