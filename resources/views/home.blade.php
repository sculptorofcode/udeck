@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    <div class="welcome-section">
        <h1 class="welcome-title">Welcome back</h1>
        <p class="welcome-subtitle">{{ Auth::user()->name }}</p>
        
        @if (session('status'))
            <div class="status-alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
    
    <div class="dashboard-grid">
        <div class="dashboard-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" fill="currentColor"/></svg>
            </div>
            <h3>Dashboard</h3>
            <p>View your activity overview</p>
        </div>
        
        <div class="dashboard-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" fill="currentColor"/></svg>
            </div>
            <h3>Profile</h3>
            <p>Update your personal information</p>
        </div>
        
        <div class="dashboard-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" fill="currentColor"/></svg>
            </div>
            <h3>Tasks</h3>
            <p>Manage your daily tasks</p>
        </div>
        
        <div class="dashboard-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="currentColor"/></svg>
            </div>
            <h3>Home</h3>
            <p>Return to homepage</p>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .dashboard-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 2rem 1.5rem;
    }
    
    .welcome-section {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .welcome-title {
        font-weight: 500;
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 0.5rem;
    }
    
    .welcome-subtitle {
        font-size: 1.5rem;
        color: #666;
        font-weight: 300;
    }
    
    .status-alert {
        background: #e3f2fd;
        color: #0d47a1;
        padding: 1rem;
        border-radius: 8px;
        margin: 1.5rem auto;
        max-width: 500px;
    }
    
    .dashboard-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
    }
    
    .dashboard-card {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        text-align: center;
    }
    
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0,0,0,0.1);
    }
    
    .dashboard-card .icon {
        width: 60px;
        height: 60px;
        background: #f5f5f5;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        color: #4a67ed;
    }
    
    .dashboard-card h3 {
        margin: 0.75rem 0;
        color: #333;
        font-weight: 500;
    }
    
    .dashboard-card p {
        color: #666;
        margin: 0;
        font-size: 0.9rem;
    }
</style>
@endsection
