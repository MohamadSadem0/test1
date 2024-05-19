package com.example.Alert.Guard.entity;

import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
@Entity
@Table(name = "password_reset")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class PasswordReset {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long resetId;
    @OneToOne
    @JoinColumn(name = "user_id")
    private User user;
    private String resetToken;
    private String status;
}