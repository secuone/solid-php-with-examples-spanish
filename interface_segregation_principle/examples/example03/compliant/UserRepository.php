<?php 

interface UserRepository
{
    public function save(User $user): void;
    public function saveAll(Users $users): void;
    public function search(UserId $id): ?User;
    public function all(): Users;
}
